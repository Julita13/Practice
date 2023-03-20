<label>{{$tagName}}</label>
<select id="" name="{{$tagName}}[]" multiple class="form-control select2bs4">
    
    @foreach($relationItems as $relationItem)
        <option {{ ($selected($relationItem) ? 'selected' : '') }} value="{{$relationItem->id}}">
          {{$optionName ? $relationItem->$optionName : $relationItem->name}}
        </option>
    @endforeach

</select>

{{-- {{dd($model, $relationItems, $tagName)}}; --}}