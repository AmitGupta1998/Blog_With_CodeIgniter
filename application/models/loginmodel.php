<?php 
class loginmodel extends CI_Model
{
    public function isvalidate($username,$pass)
    {
        //true..
        $q=$this->db->where(['username'=>$username,'password'=>$pass])
                    ->get('a_users');
        if($q->num_rows())
        {
            return $q->row()->id;
        }            
        else
        {
            return false;
        }

    }

   public function articleList()
   {   
    $id=$this->session->userdata('id');
    $q=$this->db->select('article_title')
               ->from('articles')
               ->where(['user_id'=>$id])
               ->get();
          return $q->result();
                
   } 


}
?>