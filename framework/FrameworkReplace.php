<?php
    function Modelreplace($ra,$rb){
        if ($ra) {
            $i = 0;
            while (($line = fgets($ra)) !== false) {
                $string = str_replace(' ', '', $line);
                $len = strlen($string);
                $t = $len-3;
                $a = substr($string,$t);
                $b = substr($string,0,1);
                if($b == "@" && preg_match("/\)/",$a)){
                    $s[$i] = str_replace(")",'){ ?>'  ,$line);
                    $s[$i] = str_replace("@",'<?php '  ,$s[$i]);
                    $p[$i] = $line;
                    $i++;
                }
            }}
        $counts = count($s)-1;
            $i = 0;
            $x = 1;
            $tt[0] = $rb;
            while ($i <= $counts){
                $tt[$x] = str_replace($p[$i],$s[$i] ,$tt[$i]);
                $i++;
                $x++;
            }
        $one = str_replace("{{","<?php echo translate('"  ,$tt[$x-1]);
        $two = str_replace("}}","')?>" ,$one);
        $three = preg_replace("/@end[\w]*/",'<?php } ?>'  ,$two);

        return($three);
    };

