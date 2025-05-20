use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessionsController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\ProfessionController;

 ...existing code...

Route::get('/meslekler/search', [ProfessionController::class, 'search'])->name('api.meslekler.search');
Route::get('/iller/search', [CitiesController::class, 'search'])->name('api.iller.search');
Route::get('/professions/search', [ProfessionController::class, 'search'])->name('api.professions.search');

 ...existing code...