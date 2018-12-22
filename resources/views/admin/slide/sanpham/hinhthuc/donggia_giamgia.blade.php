<div id="_giamgia" class="form-group">
    <label>Giảm giá(%)</label>
    <select id="giamgia" name="giamgia" class="form-control">
        <option value="0" >Không giảm giá</option>
        @for($i=1;$i<=99;$i++)
        <option value="{{$i}}" {{ old('giamgia') == $i ? 'selected' : '' }}>{{$i}}</option>
        @endfor
    </select>
</div>
<div id="_chiase" class="form-group">
    <label>Chia sẻ(%)</label>
    <select id="chiase" name="chiase" class="form-control">
        <option value="0" >Không hưởng hoa hồng</option>
        @for($i=1;$i<=99;$i++)
        <option value="{{$i}}" {{ old('chiase') == $i ? 'selected' : '' }}>{{$i}}</option>
        @endfor
    </select>
</div>