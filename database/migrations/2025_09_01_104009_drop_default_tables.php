<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Запускаем миграцию: удаляем ненужные таблицы.
     */
    public function up(): void
    {
        $tables = [
            'users',
            'password_reset_tokens',
            'jobs',
            'failed_jobs',
            'job_batches',
            'password_reset_tokens',
            'personal_access_tokens',
        ];

        foreach ($tables as $table) {
            if (Schema::hasTable($table)) {
                Schema::drop($table);
            }
        }
    }

    public function down(): void
    {
    }
};
