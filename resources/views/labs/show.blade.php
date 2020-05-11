@extends('labs.layout')

@section('content')
<br>
<br>
<br>
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show lab</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('labs.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lab Name:</strong>
                {{ $lab->LabName }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Added:</strong>
                {{ $lab->DateAdded }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Location:</strong>
                {{ $lab->Location }}
            </div>
        </div>
        <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2802.0788019908578!2d-75.69820888444514!3d45.38758117910002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce05d8d37fecc3%3A0xbf5d8d7821b8dcdc!2sCarleton%20University!5e0!3m2!1sen!2sca!4v1589158391309!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
@endsection