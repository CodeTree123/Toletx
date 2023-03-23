@if(Request::is('post/*'))
<div class="col-sm-12 col-md-12 mb-3">
    <select id="choose_post_type" class="form-select w-50 mx-auto">
        <option selected hidden>Choose Post Type...</option>
        <option value="Rent">Rent</option>
        <option value="Want">Want</option>
    </select>
</div>
@else
<div class="col-sm-12 col-md-12 mb-3">
    <select id="choose_post_type" class="form-select w-50 mx-auto border border-dark" name="user_searched_type">
        <option selected hidden>Choose Search Type...</option>
        <option value="Rent">Rent</option>
        <option value="Want">Want</option>
    </select>
</div>
@endif