<?php
   class note
   {
      private $id_client=null;
      private $note=null;
      private $date_passage=null;
      
      public function note ($id_cli, $noter, $date_pass)
      {
         $this->note=$noter;
	 $this->date_passage=$date_pass;
      }
      
      public function get_id()
      {
         return $this->id_client=$id_cli;
      }
      
      public function get_date ()
      {
	 return $this->date_passage;
      }
      
      public function get_note()
      {
         return $this->note;
      }
      
      public function noter($id_cli, $date_pass, $note)
      {
         $this->date_passage=$date_pass;
         $SQL="UPDATE lb_passage SET note=$note WHERE id_client=$id_cli AND date_passage='$date_pass'";
         echo '<br>'.$SQL;
	 mysql_query($SQL) or die (mysql_error());
      }
   }
?>