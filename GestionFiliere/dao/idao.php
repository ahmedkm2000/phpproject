<?php

interface idao {
     
    function create($o);
    function delete($o);
    function findAll();
    function findById($id);
}

