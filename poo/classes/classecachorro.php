<?php
    require_once 'classemamifero.php';
    class Cachorro extends Mamifero {
        public function emitirSom() {
            echo "<p>AU-AU!</p>";
        }

        public function reagirFrase($frase) {
            if ($frase == "Toma comida" || $frase == "Olá") {
                echo "<p>Abanar o rabo e latir!</p>";
            } else {
                echo "<p>Rosnar!</p>";
            }
        }
        public function reagirHora($hora, $min) {
            if ($hora < 12) {
                echo "<p>Abanar!</p>";
            } elseif ($hora >= 18) {
                echo "<p>Ignorar!</p>";
            } else {
                echo "<p>Latir!</p>";
            }
        }
        public function reagirDono($dono) {
            if ($dono) {
                echo "<p>Abanar!</p>";
            } else {
                echo "<p>Rosnar e latir!</p>";
            }
        }
        public function reagirIdadePeso($idade, $peso) {
            if ($idade < 5) {
                if ($peso < 10) {
                echo "<p>Abanar!</p>";
                } else {
                echo "<p>Latir!</p>";
            
            }
        } else {
                echo "<p>Rosnar!</p>";
            }
        }
    }


?>