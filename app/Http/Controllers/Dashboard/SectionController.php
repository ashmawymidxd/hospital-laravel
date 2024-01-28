<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Sections\SectionRepositoryInterface;
use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Requests\SectionsRequest;

=======
>>>>>>> 5695330 (changes)
=======
use App\Http\Requests\SectionsRequest;

>>>>>>> fef324d (changes)

class SectionController extends Controller
{

    private $Sections;

    public function __construct(SectionRepositoryInterface $Sections)
    {
        $this->Sections = $Sections;
    }

    public function index()
    {
      return  $this->Sections->index();

    }

    public function show($id)
    {
       return $this->Sections->show($id);
    }


<<<<<<< HEAD
<<<<<<< HEAD
    public function store(SectionsRequest $request)
=======
    public function store(Request $request)
>>>>>>> 5695330 (changes)
=======
    public function store(SectionsRequest $request)
>>>>>>> fef324d (changes)
    {
        return $this->Sections->store($request);
    }


    public function update(Request $request)
    {
        return $this->Sections->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->Sections->destroy($request);
    }
}
