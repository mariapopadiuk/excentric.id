import { domReady } from '@roots/sage/client';
import "./scroll"
import "./formCheckBox"
import "./navPage"
import "./cursor"
import "./changeTextOnScroll"
import './horizontal-scroll'
/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }
  // application code
};
//END Change text on scroll

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
