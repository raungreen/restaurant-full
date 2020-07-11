@extends('layouts.app')

@section('title')
About - {{$settings["general"]->site_title}} 
@endsection

@section('description')
Billy's Burgers has been around since the beginning of the Disco era. 
@endsection

@section('content')
    <div id="about-page">
    <div class="content-box">
    <div class="row">
    <div class="col-md-6">
      <h1>About Page </h1>
      <p>
        I'm baby humblebrag chartreuse fashion axe disrupt photo booth tofu woke schlitz messenger bag vaporware church-key. Cliche pop-up hoodie pinterest, tote bag farm-to-table shabby chic literally tumeric kickstarter viral. Street art mixtape blog copper mug franzen, organic fanny pack la croix stumptown you probably haven't heard of them pinterest fashion axe VHS raw denim. Lomo lo-fi williamsburg, adaptogen flexitarian sustainable roof party irony banh mi PBR&B 3 wolf moon. Tote bag PBR&B fashion axe iPhone organic butcher hammock vice umami YOLO. Meh tote bag master cleanse church-key, franzen umami migas tilde chicharrones knausgaard mumblecore williamsburg lyft.
      </p>
      <p>
        I'm baby humblebrag chartreuse fashion axe disrupt photo booth tofu woke schlitz messenger bag vaporware church-key. Cliche pop-up hoodie pinterest, tote bag farm-to-table shabby chic literally tumeric kickstarter viral. Street art mixtape blog copper mug franzen, organic fanny pack la croix stumptown you probably haven't heard of them pinterest fashion axe VHS raw denim. Lomo lo-fi williamsburg, adaptogen flexitarian sustainable roof party irony banh mi PBR&B 3 wolf moon. Tote bag PBR&B fashion axe iPhone organic butcher hammock vice umami YOLO. Meh tote bag master cleanse church-key, franzen umami migas tilde chicharrones knausgaard mumblecore williamsburg lyft.
      </p>
      </div>
        <div class="col-md-6">
          <img src="/img/about-burgers.jpeg" class="img-fluid">
        </div>
      </div>
      <div>
    </div>
@endsection