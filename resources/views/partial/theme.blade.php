{{-- selector for the theme of the site, used as a session value. --}}
<form name="frmThemeSelect" action = "{{ url('/') }}" method="post" class='top-left'>
  {{ csrf_field() }}
  @php
    $themeOptions = ['Select','Dark','Light'];
    echo "<select name='themeSelect' onChange='document.frmThemeSelect.submit()'>";
  @endphp
  @for ($i=0; $i < count($themeOptions); $i++)
    @php
      echo "<option value='".$i."'>".$themeOptions[$i]."</option>'";
    @endphp
  @endfor
  @php
    echo "</select>";
  @endphp
</form>
