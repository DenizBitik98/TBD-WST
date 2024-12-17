<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    // Если таблица в базе данных имеет другое имя, укажите его:
    // protected $table = 'название_таблицы';

    // Если primary key отличается от "id", укажите его:
    // protected $primaryKey = 'primary_key_column';

    // Если primary key не автоинкрементируется, установите false:
    // public $incrementing = false;

    // Если ключ не числовой, укажите его тип:
    // protected $keyType = 'string';

    // Для массового назначения укажите заполняемые поля:
    protected $fillable = [
        'name',           // Имя пользователя
        'message',        // Отзыв
        'created_at',     // Дата создания
        'updated_at',     // Дата обновления
    ];

    // Если необходимо указать, что таблица не использует `timestamps`, отключите их:
    // public $timestamps = false;
}

