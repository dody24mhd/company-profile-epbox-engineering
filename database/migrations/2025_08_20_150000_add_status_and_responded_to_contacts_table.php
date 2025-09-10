<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            if (!Schema::hasColumn('contacts', 'status')) {
                $table->string('status')->default('unread')->after('message');
            }
            if (!Schema::hasColumn('contacts', 'responded_at')) {
                $table->timestamp('responded_at')->nullable()->after('status');
            }
        });
    }

    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            if (Schema::hasColumn('contacts', 'responded_at')) {
                $table->dropColumn('responded_at');
            }
            if (Schema::hasColumn('contacts', 'status')) {
                $table->dropColumn('status');
            }
        });
    }
};
