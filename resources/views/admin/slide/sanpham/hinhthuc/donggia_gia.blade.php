<div id="_gia" class="form-group">
    <label>Giá</label>
    <input id="gia" type="number" min=0 name="gia" value="" class="form-control" />
    <p id="view_gia" style="padding: 1px 12px;color:red;"></p>
</div>
<div id="_chiase" class="form-group">
    <label>Chia sẻ(%)</label>
    <select id="chiase" name="chiase" class="form-control">
        <option value="0" >Không hưởng hoa hồng</option>
        @for($i=1;$i<=99;$i++)
        <option value="{{$i}}">{{$i}}</option>
        @endfor
    </select>
    <p id="view_chiase" style="padding: 1px 12px;color:red;"></p>
</div>
<script>
function number_format( number, decimals, dec_point, thousands_sep ) {
    var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
    var d = dec_point == undefined ? "," : dec_point;
    var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
    var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
                              
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}
$(function(){
    $("#gia").keyup(function () {
        var gia =$(this).val();
		var value='Giá: '+number_format(gia,0,'.',',')+'đ';
        $("#view_gia").text(value);

        var chiase =$("#chiase").val();
        var value=gia*chiase/100;
        var value='Hoa hồng: '+number_format(value,0,'.',',')+'đ';
        $("#view_chiase").text(value);
    }).keyup();
});
$(document).ready(function(){
    $("#chiase").change(function(){
        var gia =$("#gia").val();
        var giamgia =$("#giamgia").val();
            gia=gia*(100-giamgia)/100;
        var chiase =$("#chiase").val();
        var value=gia*chiase/100;
        value='Hoa hồng: '+number_format(value,0,'.',',')+'đ';
        $("#view_chiase").text(value);
    })
})
</script>