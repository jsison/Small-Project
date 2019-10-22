<?php
    class Project{
        public $name;
        public $members;
        public $est_hours;

        //Setters and Getters for classes
        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $name;
        }

        function set_members($members){
            $this->members = members;
        }
        function get_members($members){
            return $members;
        }
        
        function set_esthours($est_hours){
            $this->$est_hours = $est_hours;
        }
        function get_esthours(){
            return $est_hours;
        }
    }
?>