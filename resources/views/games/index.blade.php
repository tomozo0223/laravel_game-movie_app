<x-app-layout>
    <div class="w-4/5 m-auto">
        <h1 class="text-4xl font-bold text-white mt-4 mb-4 text-center bg-red-300 p-2 rounded-md">ゲーム動画投稿アプリ</h1>
        <div class="w-full">
            <form action="#" enctype="multipart/form-data" class="text-center">
                <h2 class="mb-2 text-xl font-semibold">動画投稿</h2>
                <label for="">タイトル:</label>
                <input type="text" name="" id="" class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input type="file" name="" id="">
                <x-primary-button class="bg-blue-600">投稿</x-primary-button>
            </form>
        </div>
        <div class="bg-gray">
            <div class="w-full mt-8">
                <div class="w-3/4 bg-gray-200 m-auto mb-8">
                    <p class="text-base	text-center pt-4">動画タイトル</p>
                    <img src="https://placehold.jp/300x300.png" class="m-auto py-4">
                    <p class="text-base	text-right p-2">2024-11-13 ユーザー名</p>
                </div>
                <div class="w-3/4 bg-gray-200 m-auto mb-8">
                    <p class="text-base	text-center pt-4">動画タイトル</p>
                    <img src="https://placehold.jp/300x300.png" class="m-auto py-4">
                    <p class="text-base	text-right p-2">2024-11-13 ユーザー名</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
