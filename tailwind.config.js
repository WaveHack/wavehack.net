module.exports = {
    purge: [
        'source/**/*.blade.php',
        'source/**/*.md',
        'source/**/*.html',
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': [
                    'Nunito Sans',
                    'sans-serif'
                ],
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
