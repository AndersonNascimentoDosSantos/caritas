<?php

function verificarArrayVazio($array) {
  foreach ($array as $item) {
      if (empty($item)) {
          return true; // Retorna true se algum item estiver vazio
      }
  }
  return false; // Retorna false se nenhum item estiver vazio
}