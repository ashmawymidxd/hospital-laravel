<?php
namespace App\Interfaces\Sections;
use App\Http\Requests\SectionsRequest;


interface SectionRepositoryInterface
{

    // get All Sections
    public function index();

    // store Sections
    public function store(SectionsRequest $request);

    // Update Sections
    public function update($request);

    // destroy Sections
    public function destroy($request);

    // destroy Sections
    public function show($id);

}
