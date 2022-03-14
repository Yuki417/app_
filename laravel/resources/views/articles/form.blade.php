{{-- 4-3 --}}
@csrf
<div class="md-form">
  <label>タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
</div>
<div class="form-group">
  <label></label>
  <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ old('body') }}</textarea>
</div>

<td><a href="" class="btn btn-primary">編集</a></td>  {{-- TOPページにある編集ボタン 参考サイト https://qiita.com/kamome_susume/items/10f6774329ac289b7fbe--}}
