{{-- @extends('posts.layout')

@section('title', $post->title)

@section('content') --}}
<x-layout>
    {{-- <x-post :post="$post" :comments="$comments" class="font-weight-bold"/> --}}

    <x-test :post="$post" :comments="$comments" class="font-weight-bold" />
    <h3>أضف تعليقا</h3>
    <x-createComment :post="$post" />
    <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">تدوينات أقدم</a>
        <a class="btn btn-outline-secondary disabled">تدوينات أحدث</a>
    </nav>

    </div>

    <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="fst-italic">حول</h4>
                <p class="mb-0">أقبلت، فأقبلت معك الحياة بجميع صنوفها وألوانها: فالنبات ينبت، والأشجار تورق
                    وتزهر، والهرة تموء، والقمري يسجع، والغنم يثغو، والبقر يخور، وكل أليف يدعو أليفه. كل شيء يشعر
                    بالحياة وينسي هموم الحياة، ولا يذكر إلا سعادة الحياة، فإن كان الزمان جسدا فأنت روحه، وإن كان
                    عمرا فأنت شبابه.</p>
            </div>

            <div class="p-4">
                <h4 class="fst-italic">الأرشيف</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">مارس 2021</a></li>
                    <li><a href="#">شباط 2021</a></li>
                    <li><a href="#">يناير 2021</a></li>
                    <li><a href="#">ديسمبر 2020</a></li>
                    <li><a href="#">نوفمبر 2020</a></li>
                    <li><a href="#">أكتوبر 2020</a></li>
                    <li><a href="#">سبتمبر 2020</a></li>
                    <li><a href="#">اغسطس 2020</a></li>
                    <li><a href="#">يوليو 2020</a></li>
                    <li><a href="#">يونيو 2020</a></li>
                    <li><a href="#">مايو 2020</a></li>
                    <li><a href="#">ابريل 2020</a></li>
                </ol>
            </div>

            <div class="p-4">
                <h4 class="fst-italic">في مكان آخر</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </div>
    </div>
    </div>

    </main>
    </div>
</x-layout>

{{-- @endsection --}}
