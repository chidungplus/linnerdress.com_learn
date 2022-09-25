<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function getNameColorId($color_id){
        switch ($color_id) {
            case '0':
                return "Chưa Phân Loại";
                break;
            case '1':
                return "Màu Trắng";
                break;
            case '2':
                return "Màu Đen";
                break;
            case '3':
                return "Màu Nude";
                break;
            case '4':
                return "Màu Đỏ";
                break;
            case '5':
                return "Màu Xanh Lục";
                break;
            case '6':
                return "Màu Xanh Dương";
                break;
            case '7':
                return "Màu Xanh Than";
                break;
            default:
                return "Unknown";
                break;
        }
    }
}
