<?php
$derivadas = [
    'x^n' => function($n) { 
        return $n . "x^" . ($n - 1); 
    },
    'sen' => function($v) { return "cos($v)"; },
    'cos' => function($v) { return "-sen($v)"; },
];

function derivar($funcao) {
    $regex = '/(\d*)x\^(\d+)|sen\((.+?)\)|cos\((.+?)\)/';
    
    return preg_replace_callback($regex, function($matches) use ($derivadas) {
        if ($matches[2]) {
      
            return $derivadas['x^n']($matches[2]);
        }
        if ($matches[3]) {
            
            return $derivadas['sen']($matches[3]);
        }
        if ($matches[4]) {
            
            return $derivadas['cos']($matches[4]);
        }
    }, $funcao);
}

echo derivar("x^3 + 2x + sen(4x)");
?>


