@extends('admin.layouts.document')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{Str::ucfirst(trans('app.change_destination'))}}: [<?= ($destination->destination ?? ''); ?>]</h3>
    </div>
    <form action="{{route('admin.destinations.update', $destination)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf

        <input type="hidden" name="id" value="<?= ($destination->id ?? ''); ?>">
        <div class="card-body">
            <div class="form-group">
                <label for="destination">{{Str::ucfirst(trans('app.destination'))}}</label>
                <input type="text" class="form-control" name="destination" value="<?= ($destination->destination ?? ''); ?>" id="destination" placeholder="{{Str::ucfirst(trans('app.destination'))}}">
            </div>

            <div class="form-group">
                <label for="description">{{Str::ucfirst(trans('app.description'))}}</label>
                <input type="text" class="form-control" name="description" value="<?= ($destination->description ?? ''); ?>" id="description" placeholder="{{Str::ucfirst(trans('app.description'))}}">
            </div>

            <div class="form-group">
                <label for="capital">{{Str::ucfirst(trans('app.capital'))}}</label>
                <input type="text" class="form-control" name="capital" value="<?= ($destination->capital ?? ''); ?>" id="capital" placeholder="{{Str::ucfirst(trans('app.capital'))}}">
            </div>

            <div class="form-group">
                <label for="population">{{Str::ucfirst(trans('app.population'))}}</label>
                <input type="number" class="form-control"  name="population" value="<?= ($destination->population ?? ''); ?>" id="population" placeholder="{{Str::ucfirst(trans('app.population'))}}">
            </div>

            <div class="form-group">
                <label for="currency">{{Str::ucfirst(trans('app.currency'))}}</label>
                <input type="text" class="form-control"  name="currency" value="<?= ($destination->currency ?? ''); ?>" id="currency" placeholder="{{Str::ucfirst(trans('app.currency'))}}">
            </div>

           
            <x-forms.multi-relation-select :tagName="'operators'" :model="$destination" :relationItems="$operators" />
            <x-forms.multi-relation-select :tagName="'languages'" :model="$destination" :relationItems="$languages"/>


            <div class="form-group">
                <x-forms.image-input :images="[$destination->image]" :label="'cover-image'" :inputName="'image'" :oldInputName="'old_cover_image'"/>
              </div>

            <div class="form-group">
                <x-forms.image-input :images="$destination->images" :label="'images'" :inputName="'images[]'" :oldInputName="'old_images[]'"/>
            </div>

              
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{Str::ucfirst(trans('app.submit'))}}</button>
            </div>
    </form>
</div>

@endsection