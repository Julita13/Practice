<label for="">{{Str::ucfirst($tagName)}}</label>
    <select id="" name="{{$tagName}}[]" multiple class="form-control select2bs4">
        @foreach($relationItems as $relationItem)
            <option {{ ($selected($relationItem) ? 'selected' : '') }} value="{{$relationItem->id}}">
                {{($relationItem->tour_operator) ? $relationItem->tour_operator : ((($relationItem->language)) ? $relationItem->language : $relationItem->destination)}}
            </option>
        @endforeach
    </select>





