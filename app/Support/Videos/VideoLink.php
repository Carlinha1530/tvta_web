<?php

namespace App\Support\Videos;

// app/Support/Videos/VideoLink.php
class VideoLink
{
    public static function parse($url)
    {
        // Fix schema-less links
        if (!preg_match('{^(?:https?:)?//}', $url)) {
            $url = "//{$url}";
        }

        // Parse URL
        $parts = parse_url($url);
        $_path = explode('/', $parts['path']);
        parse_str(@$parts['query'], $qs);

        // Parse YouTube links
        if (preg_match('{(youtube\.com|youtu\.be)$}', $parts['host'])) {
            return new YoutubeVideo($qs['v'] ?? end($_path));
        }

        // Parse Vimeo links
        if (preg_match('{vimeo\.com$}', $parts['host'])) {
            return new VimeoVideo(end($_path));
        }

        return;
    }
}

// app/Support/Videos/AbstractVideo.php
abstract class AbstractVideo
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    abstract public function type();

    abstract public function toEmbed();   
}

// app/Support/Videos/YoutubeVideo.php
class YoutubeVideo extends AbstractVideo
{
    public function type()
    {
        return 'youtube';
    }

    public function toEmbed()
    {
        return sprintf(
            'https://youtube.com/embed/%s?feature=oembed&autoplay=1',
            $this->id
        );
    }
}

// app/Support/Videos/VimeoVideo.php
class VimeoVideo extends AbstractVideo
{
    public function type()
    {
        return 'vimeo';
    }

    public function toEmbed()
    {
        return sprintf(
            'https://player.vimeo.com/video/%s?feature=oembed&autoplay=1',
            $this->id
        );
    }
}

// TESTING

$links = [
    'https://www.youtube.com/watch?v=DFYRQ_zQ-gk&feature=featured',
    'https://www.youtube.com/watch?feature=featured&v=DFYRQ_zQ-gk',
    'https://www.youtube.com/watch?t=120&v=DFYRQ_zQ-gk',
    'https://www.youtube.com/watch?v=DFYRQ_zQ-gk',
    'http://www.youtube.com/watch?v=DFYRQ_zQ-gk',
    '//www.youtube.com/watch?v=DFYRQ_zQ-gk',
    'www.youtube.com/watch?v=DFYRQ_zQ-gk',
    'https://youtube.com/watch?v=DFYRQ_zQ-gk',
    'http://youtube.com/watch?v=DFYRQ_zQ-gk',
    '//youtube.com/watch?v=DFYRQ_zQ-gk',
    'youtube.com/watch?v=DFYRQ_zQ-gk',
    'https://m.youtube.com/watch?v=DFYRQ_zQ-gk',
    'http://m.youtube.com/watch?v=DFYRQ_zQ-gk',
    '//m.youtube.com/watch?v=DFYRQ_zQ-gk',
    'm.youtube.com/watch?v=DFYRQ_zQ-gk',
    'https://www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US',
    'http://www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US',
    '//www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US',
    'www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US',
    'youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US',
    'https://www.youtube.com/embed/DFYRQ_zQ-gk?autoplay=1',
    'https://www.youtube.com/embed/DFYRQ_zQ-gk',
    'http://www.youtube.com/embed/DFYRQ_zQ-gk',
    '//www.youtube.com/embed/DFYRQ_zQ-gk',
    'www.youtube.com/embed/DFYRQ_zQ-gk',
    'https://youtube.com/embed/DFYRQ_zQ-gk',
    'http://youtube.com/embed/DFYRQ_zQ-gk',
    '//youtube.com/embed/DFYRQ_zQ-gk',
    'youtube.com/embed/DFYRQ_zQ-gk',
    'https://youtu.be/DFYRQ_zQ-gk?t=120',
    'https://youtu.be/DFYRQ_zQ-gk',
    'http://youtu.be/DFYRQ_zQ-gk',
    '//youtu.be/DFYRQ_zQ-gk',
    'youtu.be/DFYRQ_zQ-gk',
    'https://www.youtube.com/HamdiKickProduction?v=DFYRQ_zQ-gk',
    'http://vimeo.com/25451551',
    'https://vimeo.com/25451551',
    'http://www.vimeo.com/25451551',
    'https://www.vimeo.com/25451551',
    'http://player.vimeo.com/video/25451551',
    'https://player.vimeo.com/video/25451551',
    '//vimeo.com/video/25451551',
    '//player.vimeo.com/video/25451551',
    'https://vimeo.com/channels/staffpicks/221441846',
    'https://vimeo.com/groups/musicvideo/videos/214855696',
];

foreach ($links as $link) {
    $video = VideoLink::parse($link);

    var_dump([
        'link' => $link,
        'type' => $video->type(),
        'embed_link' => $video->toEmbed(),
    ]);
}