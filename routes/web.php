use Illuminate\Support\Facades\Artisan;

Route::get('/correr-migraciones', function () {
    Artisan::call('migrate', ['--force' => true]);
    return 'Migraciones completadas exitosamente en la nube.';
});