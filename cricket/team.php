<?php

class team {
   public $team_name = "";
   public $players = [];

    function __construct($key, $val) {
        $this->team_name = $key;
        foreach($val as $name => $runs)
        {
            $this->players[]['name'] = $name;
            $this->players[]['runs'] = $runs;
        }

      }
}



?>