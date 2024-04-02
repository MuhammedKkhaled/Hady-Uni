@php use Illuminate\Support\Facades\Storage; @endphp
<img src="{{asset( Storage::url("uploads/ads/". $ad->image) ) }}" style="width: 100px;" alt="">
