<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Modules\Videos\app\Models\Video;
use Modules\Category\app\Models\Category;
use Modules\MindSet\app\Models\MindsetQuestion;
use App\Models\User;
use Modules\Products\app\Models\MindsetQuestions;


// Errors - Dashboard not getting updated 
// 2. unable to edit videos. Shows error after hitting submit.
// 3. Videos - Submit button takes time to appear
// Samiksha Pawar
// 10:56 PM
// 4. categories > sub-categories (list within a category) - unable to edit
// 5. Mindset questions - unable to edit or add picture
// Samiksha Pawar
// 11:03 PM
// 6. video not getting added


class DashboardController extends Controller
{
    public function index()
    {
        $count_videos = Video::count();
        $count_users = User::count();
        $count_categories = Category::count();
        $count_mindset_questions = MindsetQuestion::count();
        $count_products = MindsetQuestions::count();
        return view('user.dashboard', compact('count_videos', 'count_users', 'count_categories', 'count_mindset_questions', 'count_products'));
    }

}
