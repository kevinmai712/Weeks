/**
 * Manage global libraries like jQuery or THREE from the package.json file
 */

// Import libraries

// Import custom modules
import App from './modules/app.js';
//import MenuFullscreen from './modules/menuFullscreen.js';
import ScrollRevealer from './modules/scrollReveal.js';
//import HeadroomNavi from './modules/headroom.js';
import './modules/webFont.js';
import Carousel from './modules/carousel.js';
//import Nano from './modules/nanobar.js';
import ReadTime from './modules/readTime.js';
import PostLength from './modules/postlength.js';
import ExpandMenu from './modules/expandMenu.js';
import TeamSlider from './modules/teamSlider.js';
import HeroSlider from './modules/heroSlider.js';
import OpenForm from './modules/openForm.js';
import FixedNav from './modules/fixedNav.js';
import PrintCoupon from './modules/printCoupon.js';
import PopupForm from './modules/popupForm.js';


const app = new App();
//const slidemenu = new MenuFullscreen();
const scrollr = new ScrollRevealer();
//const headroom = new HeadroomNavi();
const carousel = new Carousel();
//const nanobar = new Nano();
const expandMenu = new ExpandMenu();
const teamSlider = new TeamSlider();
const heroSlider = new HeroSlider();
const openForm = new OpenForm();
const fixedNav = new FixedNav();
const popupForm = new PopupForm();
const printCoupon = new PrintCoupon();
//const readtime = new ReadTime();
//const postlength = new PostLength();
