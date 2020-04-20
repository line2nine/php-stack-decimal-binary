<?php


interface Stack
{
    function push($data);
    function pop();
    function top();
    function isEmpty();
    function isFull();
    function display();
}