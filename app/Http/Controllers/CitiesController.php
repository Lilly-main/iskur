use Illuminate\Http\Request;
use App\Models\Cities;

class CitiesController extends Controller
{
    public function search(Request $request)
    {
        $q = $request->input('q');
        $results = Cities::where('name', 'like', "%$q%")
            ->select('id', 'name')
            ->limit(20)
            ->get();
        return response()->json($results);
    }
    // ...existing code...
}