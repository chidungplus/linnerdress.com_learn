@if(isset($seo->review))
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "{{$seo->review->title}}",
      "image": [
        "{{$seo->review->image}}"
       ],
      "description": "{{$seo->review->description}}",
      "sku": "0446318574",
      "mpn": "925872",
      "brand": {
        "@type": "Thing",
        "name": "SHOPACC"
      },
      "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "5",
          "bestRating": "5"
        },
        "author": {
          "@type": "Person",
          "name": "{{env('APP_NAME')}}"
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "reviewCount": "{{$seo->review->reviewCount}}"
      },
      "offers": {
        "@type": "Offer",
        "url": "{{$seo->review->currentUrl}}",
        "priceCurrency": "VND",
        "price": "200000",
        "priceValidUntil": "2020-11-05",
        "itemCondition": "https://schema.org/UsedCondition",
        "availability": "https://schema.org/InStock",
        "seller": {
          "@type": "Organization",
          "name": "{{env('APP_NAME')}}"
        }
      }
    }
    </script>
    @endif  