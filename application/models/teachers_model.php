<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 
/*****
* Generator Class MC v.1.55
BITSHARE S.A.C
* Proyecto
* V. 1.0
* Iniciado: 29/09/2015
* Descripcion: Este Modelo controla la tabla de la base de datos con su mismo nombre
******/

/***
* @EXTIENDE EL MODELO
* Descripcion: se utilizara para nuevas funciones
* Creador: Rolando Contreras H.
* Fecha: 16/11/2016
****/

class teachers_model_atributos{	
    var $teacher_id='';
    var $name='';
    var $profetion='';
    var $description='';
    var $img='';
    var $date='';
    var $twiter='';
    var $facebook='';
    var $instagram='';
    var $active='';
    var $updated_at='';
    var $updated_by='';
}

class Teachers_Model extends CI_Model{ 

    public function __construct() {
        parent::__construct();  
        $this->table = 'teachers';
	$this->table_id = 'teacher_id';
        $this->teacher_id='';
        $this->name='';
        $this->profetion='';
        $this->description='';
        $this->img='';
        $this->date='';
        $this->twiter='';
        $this->facebook='';
        $this->instagram='';
        $this->active='';
        $this->updated_at='';
        $this->updated_by='';
	$this->fields = new teachers_model_atributos();
    }   
    
    public function fields(){
    }
    
    public function insert($data){
      $this->db->insert($this->table, $data);
      return $this->db->insert_id();
    }
  
    public function insert_lote($data){
      $this->db->insert_batch($this->table, $data);
    }
  
    public function update($pk, $data){
        $this->db->where($this->table_id, $pk);
        $this->db->update($this->table, $data);
    }

    public function delete($pk){
        $this->db->where($this->table_id, $pk);
        $this->db->delete($this->table);
    }
  
    public function get_search_row($data){
        if (isset($data["select"])&& $data["select"]!=""){$this->db->select($data["select"]);}
        if (isset($data["where"]) && $data["where"]!=""){$this->db->where($data["where"]);}
        if (isset($data["order"]) && $data["order"]!=""){$this->db->order_by($data["order"]);}
        if (isset($data["group"]) && $data["group"]!=""){$this->db->group_by($data["group"]);}
        if (isset($data["join"])){if (count($data["join"])>0){ foreach ($data["join"] as $rowJoin){$split = explode(",",$rowJoin);$this->db->join($split[0],$split[1]);}}}
       $this->db->from($this->table);       
       $query=  $this->db->get();
       return $query->row();
    }

    public function search($data){ 
        if (isset($data["select"])&& $data["select"]!=""){$this->db->select($data["select"]);}
        if (isset($data["where"]) && $data["where"]!=""){$this->db->where($data["where"]);}
        if (isset($data["order"]) && $data["order"]!=""){$this->db->order_by($data["order"]);}
        if (isset($data["group"]) && $data["group"]!=""){$this->db->group_by($data["group"]);}
        if (isset($data["join"])){if (count($data["join"])>0){ foreach ($data["join"] as $rowJoin){$split = explode(",",$rowJoin);$this->db->join($split[0],$split[1]);}}}
        if (isset($data["limit"]) && $data["limit"]!=""){$this->db->limit($data["limit"]);}
        $this->db->from($this->table);
        $query = $this->db->get();
        $dato = $query->result();
        return $dato;
    }

    public function total_records($data){        
        if (isset($data["select"])&& $data["select"]!=""){$this->db->select($data["select"]);}
        if (isset($data["where"]) && $data["where"]!=""){$this->db->where($data["where"]);}
        if (isset($data["order"]) && $data["order"]!=""){$this->db->order_by($data["order"]);}
        if (isset($data["group"]) && $data["group"]!=""){$this->db->group_by($data["group"]);}
        if (isset($data["join"])){if (count($data["join"])>0){ foreach ($data["join"] as $rowJoin){$split = explode(",",$rowJoin);$this->db->join($split[0],$split[1]);}}}      
        $this->db->from($this->table);
        $query = $this->db->get();
        $dato = $query->num_rows();
        return $dato;      
  }

  public function search_data($data,$inicio,$num_reg){       
        if (isset($data["select"])&& $data["select"]!=""){$this->db->select($data["select"]);}
        if (isset($data["where"]) && $data["where"]!=""){$this->db->where($data["where"]);}
        if (isset($data["order"]) && $data["order"]!=""){$this->db->order_by($data["order"]);}
        if (isset($data["group"]) && $data["group"]!=""){$this->db->group_by($data["group"]);}
        if (isset($data["join"])){if (count($data["join"])>0){ foreach ($data["join"] as $rowJoin){$split = explode(",",$rowJoin);$this->db->join($split[0],$split[1]);}}}
        //if (isset($data["limit"]) && $data["limit"]!=""){$this->db->limit($data["limit"]);}        
        $this->db->from($this->table);       
        $query = $this->db->get("",$inicio,$num_reg);        
        $dato = $query->result();
        return $dato;       
  }
  
  public function search_data_rows($data,$inicio,$num_reg){       
        if (isset($data["select"])&& $data["select"]!=""){$this->db->select($data["select"]);}
        if (isset($data["where"]) && $data["where"]!=""){$this->db->where($data["where"]);}
        if (isset($data["order"]) && $data["order"]!=""){$this->db->order_by($data["order"]);}
        if (isset($data["group"]) && $data["group"]!=""){$this->db->group_by($data["group"]);}
        if (isset($data["join"])){if (count($data["join"])>0){ foreach ($data["join"] as $rowJoin){$split = explode(",",$rowJoin);$this->db->join($split[0],$split[1]);}}}
        //if (isset($data["limit"]) && $data["limit"]!=""){$this->db->limit($data["limit"]);}        
        $this->db->from($this->table);       
        $query = $this->db->get("",$inicio,$num_reg);        
        $dato = $query->row();
        return $dato;       
  }
} //FIN DEL MODELO EXTENDIDO
?>