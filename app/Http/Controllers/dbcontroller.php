<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Exports\ClienteExport;
use App\Exports\pedidosExport;
use App\Exports\serigrafiaExport;
use App\Exports\ImpresionExport;
use App\Exports\BordadoExport;
use App\Exports\UsuarioExport;
use Excel;

class dbcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function descargar(){
                //ENTER THE RELEVANT INFO BELOW
        $mysqlHostName      = env('DB_HOST');
        $mysqlUserName      = env('DB_USERNAME');
        $mysqlPassword      = env('DB_PASSWORD');
        $DbName             = env('DB_DATABASE');
        $file_name = 'Respaldo_sericolor_en_' . date('d-m-y') . '.sql';


        $queryTables = \DB::select(\DB::raw('SHOW TABLES'));
        foreach ( $queryTables as $table )
        {
            foreach ( $table as $tName)
            {
                $tables[]= $tName ;
            }
        }
         $tables  = array( 'persona',
                            'categoria',
                            'insumos',
                            'promocion',
                            'metodo_de_pago',
                            'usuario',
                            'cliente',                            
                            'maestro',
                            'recibo',
                            '`detalle-orden-sub,bor,ser`',
                            '`detalle-orden-imp`',
                        "slider",); //here your tables...

        $connect = new \PDO("mysql:host=$mysqlHostName;dbname=$DbName;charset=utf8", "$mysqlUserName", "$mysqlPassword",array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        $get_all_table_query = "SHOW TABLES";
        $statement = $connect->prepare($get_all_table_query);
        $statement->execute();
        $result = $statement->fetchAll();
        $output = '';
        foreach($tables as $table)
        {
            $show_table_query = "SHOW CREATE TABLE " . $table . "";
            $statement = $connect->prepare($show_table_query);
            $statement->execute();
            $show_table_result = $statement->fetchAll();

            foreach($show_table_result as $show_table_row)
            {
                $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
            }
            $select_query = "SELECT * FROM " . $table . "";
            $statement = $connect->prepare($select_query);
            $statement->execute();
            $total_row = $statement->rowCount();

            for($count=0; $count<$total_row; $count++)
            {
                $single_result = $statement->fetch(\PDO::FETCH_ASSOC);
                $table_column_array = array_keys($single_result);
                $table_value_array = array_values($single_result);
                $output .= "\nINSERT INTO $table (";
                $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
                $output .= "'" . implode("','", $table_value_array) . "');\n";
            }
        }

        $file_handle = fopen($file_name, 'w+');
        fwrite($file_handle, $output);
        fclose($file_handle);
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file_name));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_name));
        ob_clean();
        flush();
        readfile($file_name);
        unlink($file_name);
    }

    //  public function cargar(){
    //             //ENTER THE RELEVANT INFO BELOW
    //     $mysqlHostName      = env('DB_HOST');
    //     $mysqlUserName      = env('DB_USERNAME');
    //     $mysqlPassword      = env('DB_PASSWORD');
    //     $DbName             = env('DB_DATABASE');
    //     $file_name = 'Respando_sericolor_en_' . date('d-m-y') . '.sql';


    //     $queryTables = \DB::select(\DB::raw('SHOW TABLES'));
    //     foreach ( $queryTables as $table )
    //     {
    //         foreach ( $table as $tName)
    //         {
    //             $tables[]= $tName ;
    //         }
    //     }
    //     // $tables  = array("users","products","categories"); //here your tables...

    //     $connect = new \PDO("mysql:host=$mysqlHostName;dbname=$DbName;charset=utf8", "$mysqlUserName", "$mysqlPassword",array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    //     $get_all_table_query = "SHOW TABLES";
    //     $statement = $connect->prepare($get_all_table_query);
    //     $statement->execute();
    //     $result = $statement->fetchAll();
    //     $output = '';
    //     foreach($tables as $table)
    //     {
    //         $show_table_query = "SHOW CREATE TABLE " . $table . "";
    //         $statement = $connect->prepare($show_table_query);
    //         $statement->execute();
    //         $show_table_result = $statement->fetchAll();

    //         foreach($show_table_result as $show_table_row)
    //         {
    //             $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
    //         }
    //         $select_query = "SELECT * FROM " . $table . "";
    //         $statement = $connect->prepare($select_query);
    //         $statement->execute();
    //         $total_row = $statement->rowCount();

    //         for($count=0; $count<$total_row; $count++)
    //         {
    //             $single_result = $statement->fetch(\PDO::FETCH_ASSOC);
    //             $table_column_array = array_keys($single_result);
    //             $table_value_array = array_values($single_result);
    //             $output .= "\nINSERT INTO $table (";
    //             $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
    //             $output .= "'" . implode("','", $table_value_array) . "');\n";
    //         }
    //     }

    //     $file_handle = fopen($file_name, 'w+');
    //     fwrite($file_handle, $output);
    //     fclose($file_handle);
    //     header('Content-Description: File Transfer');
    //     header('Content-Type: application/octet-stream');
    //     header('Content-Disposition: attachment; filename=' . basename($file_name));
    //     header('Content-Transfer-Encoding: binary');
    //     header('Expires: 0');
    //     header('Cache-Control: must-revalidate');
    //     header('Pragma: public');
    //     header('Content-Length: ' . filesize($file_name));
    //     ob_clean();
    //     flush();
    //     readfile($file_name);
    //     unlink($file_name);
    // }

    public function Exportarclientes(){
        return Excel::download(new ClienteExport,'clientelist.xlsx');
    }
    public function Exportarusuarios(){
        return Excel::download(new UsuarioExport,'usuariolist.xlsx');
    }
    
    public function Exportarpedidos1(){
        return Excel::download(new pedidosExport,'pedidossublimacion.xlsx');
       
    }
    public function Exportarpedidos2(){
        
        return Excel::download(new serigrafiaExport,'pedidosserigrafia.xlsx');
       
    }
    public function Exportarpedidos3(){
        
        return Excel::download(new ImpresionExport,'pedidosimpresion.xlsx');
        
    }
    public function Exportarpedidos4(){
        
        return Excel::download(new BordadoExport,'pedidosbordado.xlsx');
    }




}
