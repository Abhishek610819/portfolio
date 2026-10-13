<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class Service extends Model
{
public function up(): void
{
    Schema::create('services', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->string('icon')->nullable();
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('services');
}
}
