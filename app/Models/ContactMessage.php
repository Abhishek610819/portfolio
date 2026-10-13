<?php

namespace App\Models;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
public function up(): void
{
    Schema::create('contact_messages', function (Blueprint $table) {
        $table->id();
        $table->string('name', 150);
        $table->string('email');
        $table->text('message');
        $table->boolean('is_read')->default(false);
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('contact_messages');
}
}
