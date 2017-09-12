const dev = process.env.NODE_ENV === 'dev';

module.exports = {
    entry: './src/scripts/main.js',
    output: {
        path: `${__dirname}/_s/js`,
        filename: 'bundle.js'
    },
    cache: dev,
    module: {
        rules: [{
            test: /\.js$/,
            use: [{
                loader: 'babel-loader',
                options: {
                    presets: [
                        ['env', {modules: false}]
                    ]
                }
            }],
            exclude: /node_modules/
        }]
    }
};
