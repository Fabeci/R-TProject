@extends('admin.layouts.layout-basic')

@section('content')
    <div class="main-content">
        <div class="row page-header">
            <h5 class="col-sm-8 page-title">VUE D'ENSEMBLE DES PROJETS</h5>
            <ol class="col-sm-4 breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tableau de bord</a></li>
                <li class="breadcrumb-item"><a href="#">Gestion de projets</a></li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="row mt-4">
                    <div class="offset-9 col-sm-3">
                        <div class="form-group">
                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mr-2" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-icon btn-outline-info" data-toggle="modal" data-target=".ls-example-modal-lg"><i class="icon-fa icon-fa-plus"></i></button>
                                    <button type="button" class="btn btn-icon btn-outline-info" data-toggle="modal" data-target=".ls-example-modal-lg"><i class="icon-fa icon-fa-group"></i></button>
                                    <button type="button" class="btn btn-icon btn-outline-info" data-toggle="modal" data-target=".ls-example-modal-lg"><i class="icon-fa icon-fa-cogs"></i></button>
                                    <button type="button" class="btn btn-icon btn-outline-info" data-toggle="modal" data-target=".ls-example-modal-lg"><i class="icon-fa icon-fa-comments"></i></button>
                                    <button type="button" class="btn btn-icon btn-outline-info" data-toggle="modal" data-target=".ls-example-modal-lg"><i class="icon-fa icon-fa-bar-chart"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade ls-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><i class="icon-fa icon-fa-plus"></i> Nouveau projet</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form >
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" id="newproj" placeholder="Entrer le nom du projet">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="number" class="form-control" id="budget" placeholder="Entrer le budget du projet">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <div class="custom-file">
                                                                <input type="file" class="form-control custom-file-input" id="validatedCustomFile">
                                                                <label class="custom-file-label" for="validatedCustomFile">Joindre une pièce ...</label>
                                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12 ">
                                                            <select class="form-control-select">
                                                                <option class="" value="AK">Le chef de projet</option>
                                                                <option value="HI">Hawaii</option>
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12 ">
                                                            <select class="form-control-select">
                                                                <option value="AK">La société cliente</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="HI">Hawaii</option>
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <input type="password" class="form-control" id="password1" placeholder="Password">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Quitter &times;</button>
                                        <button type="button" class="btn btn-info"><i class="icon-fa icon-fa-check-circle"></i> Créer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                
            </div>
        </div>

    </div>
@stop
