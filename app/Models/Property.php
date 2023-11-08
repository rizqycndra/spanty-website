<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    use HasFactory;

    public $fillable = ['name', 'description', 'price', 'location'];
    public $guarded = ['id'];

    private static $featureList = [
        "bed"       => "material-symbols:bed-outline",
        "bath"      => "bx:bath",
        "area"      => "mdi:vector-arrange-above",
        "other"     => "gg:more-o",
        "unknown"   => "fluent-mdl2:unknown"
    ];

    public function allIcon() {
        return self::$featureList;
    }

    static function formatIcon($data) {

        $result = [];

        foreach ($data as $d) {
            $dump = $d;
            $dumpIcon = [];
            foreach ($d->feature as $name => $value) {
                $dumpIcon[] = [
                    'name'  => $name,
                    'value' => $value,
                    'icon'  => self::$featureList[$name] ?? self::$featureList["unknown"]
                ];
            }
            $dump->feature = $dumpIcon;
            $result[] = $dump;
        }

        return collect($result);
        // return $data;

    }

    protected $casts = [
        'feature'   => "object" // Merubah data JSON dari kolom Feature ke object 
    ];

    public function review(): HasMany {
        return $this->hasMany(Review::class);
    }

    static function show($limit) {
        return self::formatIcon(self::take($limit)->get());
    }

}
