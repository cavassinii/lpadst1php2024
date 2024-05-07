<?php 
   namespace DAL; //Data Access Layer
   include_once 'C:\xampp\htdocs\lpadst1php2024\DAL\conexao.php';
   include_once 'C:\xampp\htdocs\lpadst1php2024\MODEL\Departamento.php';

   class Software{
      public function Select(){       
           
         $sql = "Select * from departamento;"; 
         $con = \DAL\Conexao::conectar(); 
         $registros = $con->query($sql);
         $con = \DAL\Conexao::desconectar(); 


         foreach ($registros as $linha){
             $sfwr = new \MODEL\Software(); 
             $sfwr->setId($linha['id']); 
             $sfwr->setDescricao($linha['descricao']);
             $sfwr->setFabricante($linha['fabricante']);
             $sfwr->setTipo($linha['tipo']);
             $sfwr->setValor($linha['valor']);
             $sfwr->setQtdCopias($linha['qtdcopias']);
             $lstSftw[] = $sfwr; 
         }
         return $lstSftw;
          
      }

      public function SelectId(int $id){}
      public function SelectDescricao(string $name){}
      public function SelectFabricante(string $fabricante){}
      public function SelectTipo(int $tipo){}
      public function SelectValor(float $valor){}
      public function SelectQtdCopias(int $qtdcopias){}
     



   }

?>