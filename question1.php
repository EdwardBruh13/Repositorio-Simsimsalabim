<?php

$resposta = (string) readline("É mamífero? (sim/nao): ");

if ($resposta === "sim") {
    $resposta = (string) readline("É quadrúpede? (sim/nao): ");
    
    if ($resposta === "sim") {
        $resposta = (string) readline("É carnívoro? (sim/nao): ");
        
        if ($resposta === "sim") {
            $resposta = (string) readline("É um grande felino? (sim/nao): ");
            
            if ($resposta === "sim") {
                echo "Então o animal escolhido foi leão.";
            } else {
                echo "Animal não identificado.";
            }
        } elseif ($resposta === "nao") {
            $resposta = (string) readline("É herbívoro? (sim/nao): ");
            
            if ($resposta === "sim") {
                echo "Então o animal escolhido foi cavalo.";
            } else {
                echo "Animal não identificado.";
            }
        } else {
            echo "Animal não identificado.";
        }
    } elseif ($resposta === "nao") {
        $resposta = (string) readline("É humano? (sim/nao): ");
        
        if ($resposta === "sim") {
            echo "Então o animal escolhido foi homem.";
        } else {
            $resposta = (string) readline("É macaco? (sim/nao): ");
            
            if ($resposta === "sim") {
                echo "Então o animal escolhido foi macaco.";
            } else {
                $resposta = (string) readline("É morcego? (sim/nao): ");
                
                if ($resposta === "sim") {
                    echo "Então o animal escolhido foi morcego.";
                } else {
                    $resposta = (string) readline("É baleia? (sim/nao): ");
                    
                    if ($resposta === "sim") {
                        echo "Então o animal escolhido foi baleia.";
                    } else {
                        echo "Animal não identificado.";
                    }
                }
            }
        }
    } else {
        echo "Animal não identificado.";
    }
} elseif ($resposta === "nao") {
    $resposta = (string) readline("É ave? (sim/nao): ");
    
    if ($resposta === "sim") {
        $resposta = (string) readline("É não voadora? (sim/nao): ");
        
        if ($resposta === "sim") {
            $resposta = (string) readline("É tropical? (sim/nao): ");
            
            if ($resposta === "sim") {
                echo "Então o animal escolhido foi avestruz.";
            } elseif ($resposta === "nao") {
                $resposta = (string) readline("É polar? (sim/nao): ");
                
                if ($resposta === "sim") {
                    echo "Então o animal escolhido foi pinguim.";
                } else {
                    echo "Animal não identificado.";
                }
            } else {
                echo "Animal não identificado.";
            }
        } elseif ($resposta === "nao") {
            $resposta = (string) readline("É uma ave de rapina? (sim/nao): ");
            
            if ($resposta === "sim") {
                echo "Então o animal escolhido foi águia.";
            } else {
                $resposta = (string) readline("É aquático? (sim/nao): ");
                
                if ($resposta === "sim") {
                    echo "Então o animal escolhido foi pato.";
                } else {
                    echo "Animal não identificado.";
                }
            }
        } else {
            echo "Animal não identificado.";
        }
    } elseif ($resposta === "nao") {
        $resposta = (string) readline("É réptil? (sim/nao): ");
        
        if ($resposta === "sim") {
            $resposta = (string) readline("Possui casco? (sim/nao): ");
            
            if ($resposta === "sim") {
                echo "Então o animal escolhido foi tartaruga.";
            } elseif ($resposta === "nao") {
                $resposta = (string) readline("É crocodilo? (sim/nao): ");
                
                if ($resposta === "sim") {
                    echo "Então o animal escolhido foi crocodilo.";
                } elseif ($resposta === "nao") {
                    $resposta = (string) readline("É cobra? (sim/nao): ");
                    
                    if ($resposta === "sim") {
                        echo "Então o animal escolhido foi cobra.";
                    } else {
                        echo "Animal não identificado.";
                    }
                } else {
                    echo "Animal não identificado.";
                }
            } else {
                echo "Animal não identificado.";
            }
        } else {
            echo "Animal não identificado.";
        }
    } else {
        echo "Animal não identificado.";
    }
} else {
    echo "Animal não identificado.";
}
?>