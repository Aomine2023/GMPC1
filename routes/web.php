<?php

use App\Http\Controllers\{
    AppointmentController,
    ArticleController,
    BannerController,
    ChaplainsController,
    ChurchHistoryController,
    CommandController,
    SermonVidoesLinkController,
    CommunitiesController,
    EventsController,
    Frontend\AboutController,
    Frontend\CommandantController,
    HistoryController, // Corrected the use statement
    GalleryController,
    LogsController,
    ProfileController,
    RankController,
    RoleController,
    UserController,
    EldersController
};

use App\Models\{
    Article,
    Banner,
    Community,
    Participant,
    Staff,
    Chaplian,
    Elder,
    History
};

use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', function () {
    $staffs = Staff::all();
    $participant = Participant::all();
    $banners = Banner::latest()->take(5)->get();
    $chaplains = Chaplian::all();
    $communities = Community::all();
    $elders = Elder::all();
    $history = History::all();
    $news = ChurchHistory::all(); // Fetch all news records

    return view('website.frontend.index', compact('staffs', 'participant', 'banners', 'communities', 'chaplains', 'elders', 'news'));
});

// History Management Routes
Route::prefix('history')->group(function () {
    Route::get('/add', [HistoryController::class, 'create'])->name('history-add');
    Route::post('/store', [HistoryController::class, 'store'])->name('history-store');
    Route::get('/', [HistoryController::class, 'index'])->name('history-index');
    Route::get('/edit/{id}', [HistoryController::class, 'edit'])->name('history-edit');
    Route::post('/update/{id}', [HistoryController::class, 'update'])->name('history-update');
    Route::get('/delete/{id}', [HistoryController::class, 'destroy'])->name('history-delete');
});

// Authentication Routes
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.layouts.index');
})->name('dashboard');

Route::get("/login", function () {
    return view("auth.login");
});

// Static Pages
Route::view('/courses', 'website.layouts.courses')->name('Courses');
Route::view('/contact', 'website.layouts.contact')->name('contact');
Route::view('/articles', 'website.layouts.articles')->name('articles');
Route::get('/article-details/{uuid}', function ($uuid) {
    $article_details = Article::where('uuid', $uuid)->firstOrFail();
    return view('website.layouts.articledetails', compact('article_details'));
})->name('article-detail');
Route::view('/matriculation', 'website.layouts.matriculation')->name('matriculation');
Route::view('/join', 'website.layouts.join')->name('join');
Route::view('/admission', 'website.layouts.admission')->name('admission');
Route::get('/participant', function () {
    $participant = Participant::all();
    return view('website.layouts.participant', compact('participant'));
})->name('participant');
Route::view('/gallery', 'website.layouts.gallery')->name('gallery');

// About and Commandant Routes
Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about');
});

Route::prefix('commandant')->group(function () {
    Route::get('/', [CommandantController::class, 'index'])->name('commandant');
});

// Admin Routes
Route::group(['prefix' => 'admin'], function () {
    Route::post('login', [LogsController::class, 'Log_in'])->name('log-in');
    Route::get('logout', [LogsController::class, 'Logout'])->name('logout')->middleware('auth');

    Route::group(['prefix' => 'settings'], function () {
        Route::resource('roles', RoleController::class);
        Route::resource('users', UserController::class);
        
        Route::prefix('profile')->group(function () {
            Route::get('/', [ProfileController::class, 'ProfileView'])->name('profileview');
            Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
            Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
            Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');
            Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
            Route::get('/inactivation/{id}', [ProfileController::class, 'Inactive'])->name('user.inactive');
            Route::get('/activation/{id}', [ProfileController::class, 'Active'])->name('user.active');
        });
    });

    // Rank Management Routes
    Route::prefix('rank')->group(function () {
        Route::get('/', [RankController::class, 'View'])->name('view-rank');
        Route::get('/mech', [RankController::class, 'RankAdd'])->name('rank-add');
        Route::post('/store', [RankController::class, 'Store'])->name('rank-store');
        Route::get('/edit/{uuid}', [RankController::class, 'Edit'])->name('rank-edit');
        Route::post('/update/{uuid}', [RankController::class, 'Update'])->name('rank-update');
        Route::get('/delete/{uuid}', [RankController::class, 'Delete'])->name('rank-delete');
    });

    // Appointment Management Routes
    Route::prefix('appointment')->group(function () {
        Route::get('/', [AppointmentController::class, 'View'])->name('view-appointment');
        Route::get('/mech', [AppointmentController::class, 'Add'])->name('appointment-add');
        Route::post('/store', [AppointmentController::class, 'Store'])->name('appointment-store');
        Route::get('/edit/{uuid}', [AppointmentController::class, 'Edit'])->name('appointment-edit');
        Route::post('/update/{uuid}', [AppointmentController::class, 'Update'])->name('appointment-update');
        Route::get('/delete/{uuid}', [AppointmentController::class, 'Delete'])->name('appointment-delete');
    });

    // Chaplains Management Routes
    Route::prefix('chaplains')->group(function () {
        Route::get('/', [ChaplainsController::class, 'View'])->name('view-participant');
        Route::get('/mech', [ChaplainsController::class, 'Add'])->name('chaplain-add');
        Route::post('/store', [ChaplainsController::class, 'Store'])->name('chaplain-store');
        Route::get('/edit/{uuid}', [ChaplainsController::class, 'Edit'])->name('chaplain-edit');
        Route::post('/update/{uuid}', [ChaplainsController::class, 'Update'])->name('chaplain-update');
        Route::get('/delete/{uuid}', [ChaplainsController::class, 'Delete'])->name('chaplain-delete');
    });

    // Communities Management Routes
    Route::prefix('communities')->group(function () {
        Route::get('/', [CommunitiesController::class, 'View'])->name('view-communities');
        Route::get('/mech', [CommunitiesController::class, 'Add'])->name('communities-add');
        Route::post('/store', [CommunitiesController::class, 'Store'])->name('communities-store');
        Route::get('/edit/{uuid}', [CommunitiesController::class, 'Edit'])->name('communities-edit');
        Route::post('/update/{uuid}', [CommunitiesController::class, 'Update'])->name('communities-update');
        Route::get('/delete/{uuid}', [CommunitiesController::class, 'Delete'])->name('communities-delete');
    });

    // Sermon Links Management Routes
    Route::prefix('sermon-links')->group(function () {
        Route::get('/', [SermonVidoesLinkController::class, 'View'])->name('view-sermon-vidoe-link');
        Route::get('/mech', [SermonVidoesLinkController::class, 'Add'])->name('sermon-vidoe-link-add');
        Route::post('/store', [SermonVidoesLinkController::class, 'Store'])->name('sermon-vidoe-link-store');
        Route::get('/edit/{uuid}', [SermonVidoesLinkController::class, 'Edit'])->name('sermon-vidoe-link-edit');
        Route::post('/update/{uuid}', [SermonVidoesLinkController::class, 'Update'])->name('sermon-vidoe-link-update');
        Route::get('/delete/{uuid}', [SermonVidoesLinkController::class, 'Delete'])->name('sermon-vidoe-link-delete');
    });

    // News Management Routes
    Route::prefix('news')->group(function () {
        Route::get('/', [ChurchHistoryController::class, 'View'])->name('view-news');
        Route::get('/mech', [ChurchHistoryController::class, 'Add'])->name('news-add');
        Route::post('/store', [ChurchHistoryController::class, 'Store'])->name('news-store');
        Route::get('/edit/{uuid}', [ChurchHistoryController::class, 'Edit'])->name('news-edit');
        Route::post('/update/{uuid}', [ChurchHistoryController::class, 'Update'])->name('news-update');
        Route::get('/delete/{uuid}', [ChurchHistoryController::class, 'Delete'])->name('news-delete');
    });

    // Events Management Routes
    Route::prefix('events')->group(function () {
        Route::get('/', [EventsController::class, 'View'])->name('view-events');
        Route::get('/mech', [EventsController::class, 'Add'])->name('events-add');
        Route::post('/store', [EventsController::class, 'Store'])->name('events-store');
        Route::get('/edit/{uuid}', [EventsController::class, 'Edit'])->name('events-edit');
        Route::post('/update/{uuid}', [EventsController::class, 'Update'])->name('events-update');
        Route::get('/delete/{uuid}', [EventsController::class, 'Delete'])->name('events-delete');
    });

    // Article Management Routes
    Route::prefix('article')->group(function () {
        Route::get('/', [ArticleController::class, 'View'])->name('view-article');
        Route::get('/mech', [ArticleController::class, 'Add'])->name('article-add');
        Route::post('/store', [ArticleController::class, 'Store'])->name('article-store');
        Route::get('/edit/{uuid}', [ArticleController::class, 'Edit'])->name('article-edit');
        Route::post('/update/{uuid}', [ArticleController::class, 'Update'])->name('article-update');
        Route::get('/delete/{uuid}', [ArticleController::class, 'Delete'])->name('article-delete');
    });

    // Gallery Management Routes
    Route::prefix('gallery')->group(function () {
        Route::get('/', [GalleryController::class, 'View'])->name('view-gallery');
        Route::get('/mech', [GalleryController::class, 'Add'])->name('gallery-add');
        Route::post('/store', [GalleryController::class, 'Store'])->name('gallery-store');
        Route::get('/delete/{uuid}', [GalleryController::class, 'Delete'])->name('gallery-delete');
    });

    // Banner Management Routes
    Route::prefix('banner')->group(function () {
        Route::get('/', [BannerController::class, 'View'])->name('view-banner');
        Route::get('/mech', [BannerController::class, 'Add'])->name('banner-add');
        Route::post('/store', [BannerController::class, 'Store'])->name('banner-store');
        Route::get('/delete/{uuid}', [BannerController::class, 'Delete'])->name('banner-delete');
    });

    // Commandant Management Routes
    Route::prefix('commandant')->group(function () {
        Route::get('/', [CommandController::class, 'View'])->name('view-commandants');
        Route::get('/mech', [CommandController::class, 'Add'])->name('commandants-add');
        Route::post('/store', [CommandController::class, 'Store'])->name('commandants-store');
        Route::get('/edit/{uuid}', [CommandController::class, 'Edit'])->name('commandants-edit');
        Route::post('/update/{uuid}', [CommandController::class, 'Update'])->name('commandants-update');
        Route::get('/delete/{uuid}', [CommandController::class, 'Delete'])->name('commandants-delete');
    });

    // Elders Management Routes
    Route::prefix('elders')->group(function () {
        Route::get('/', [EldersController::class, 'view'])->name('view-elders');
        Route::get('/add', [EldersController::class, 'add'])->name('elder-add');
        Route::post('/store', [EldersController::class, 'store'])->name('elder-store');
        Route::get('/edit/{uuid}', [EldersController::class, 'edit'])->name('elder-edit');
        Route::post('/update/{uuid}', [EldersController::class, 'update'])->name('elder-update');
        Route::get('/delete/{uuid}', [EldersController::class, 'delete'])->name('elder-delete');
    });
});