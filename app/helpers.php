<?php


public function yearWord($number) {     

        if (5 <= $number && 20 >= $number) { // с 5 до 20 будет "лет"
        return 'Товаров';
    }

        switch (substr($number, -1)) {  // последная цыфра 
        	case 1:
        	break;
        	case 2:
        	case 3:
        	case 4:
        	$word = 'Товарa';
        	break;
        }
        
        return $word;
    }