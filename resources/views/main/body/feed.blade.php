<?= '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL ?>
<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss/" xmlns:content="http://purl.org/rss/1.0/modules/content/">
    <channel>
        <title>{{ $seoset->meta_title }}</title>
        <link>{{ url('/') }}</link>
        <description>{{ $seoset->meta_description }}</description>
        <language>tr</language>
        <pubDate>{{ now() }}</pubDate>

        @foreach ($posts as $post)
            <item>
                <title><![CDATA[{{ $post->title_tr }}]]></title>
                <link>{{ URL::to('/' . 'haber-' . str_slug($post->title_tr) . '-' . $post->id) }}</link>
                <description><![CDATA[{!! $post->description_tr !!}]]></description>
                <category>{{ $post->category_tr }}</category>
                <content:encoded><![CDATA[{!! $post->details_tr !!}]]></content:encoded>
                <author>{{ $seoset->meta_author }}</author>
                <guid>{{ URL::to('/' . 'haber-' . str_slug($post->title_tr) . '-' . $post->id) }}</guid>
                <pubDate>{{ $post->created_at->toRssString() }}</pubDate>
                <media:content url="{{ URL::to('/' . $post->image) }}" type="image/jpeg" />
            </item>
        @endforeach
    </channel>
</rss>
