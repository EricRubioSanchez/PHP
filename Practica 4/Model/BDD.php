<?php 
//Eric Rubio Sanchez
require_once("env.php");

/**
 * Summary of obrirBDD
 *    Retorna un PDO si s'ha pogut conectar al servidor o un null si no ha pogut conectarse.
 * @return PDO|null
 */	
function obrirBDD() : PDO{
    try {
      // Ens connectem a la base de dades
      //crearem nou objecte PDO (connexió,base_de_dades,usuari,password);
      $connexio = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
      return $connexio;
    } catch(PDOException $e){ //
  
  
      return null;
    }   
    
}

/**
 * Summary of executarSentencia
 *      En aquesta funcio executem les sentencies SQL.
 * @param string $sentencia Sentencia MySQL
 * @param array $array      Array que porta les variables
 * @param PDO $connexio     Conexio a la BDD
 * @return array|false retorna una array per els SELECTS i un false per la resta.
 */
function executarSentencia($sentencia,$array,$connexio){

    // Preparem la consulta SQL
    $statement = $connexio->prepare($sentencia);
  
    // Executem la consulta
    $statement->execute($array);
  
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
  
    return $result;
  
}

/**
* Summary of tancarBDD
* @param PDO $connexio
* @return null
*/
function tancarBDD($connexio){
    $connexio=null;
    return $connexio;
    }

/**
 * Summary of crearUsuari
 * @param
 * @return
 */
function crearUsuari($nom,$correu,$password){
  $conexio=obrirBDD();
    if(!is_null($conexio)){
      $setencia = "INSERT INTO usuaris (nom, correu, contrasenya) VALUES (:nom, :correu, :password)";
      $array=array(':nom' => $nom, ':correu' => $correu, ':password' => $password);

      $result=executarSentencia($setencia,$array,$conexio);

      $conexio=tancarBDD($conexio);
    }
}
?>