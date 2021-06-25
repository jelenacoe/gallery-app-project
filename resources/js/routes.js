import Home from './components/Home';
import Register from './components/Register';
import Login from './components/Login';
import Dashboard from './components/Dashboard';
import NotFound from './components/NotFound';
import SveObjave from './pages/SveObjave';
import NapraviObjavu from './pages/NapraviObjavu';
import PrikazObjave from './pages/PrikazObjave';


export default{
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Home,
            name: "Home"
        },
        {
            path: '/galerija',
            component: SveObjave,
            name: "SveObjave"
        },
        {
            path: '/register',
            component: Register
        },
        {
            path: '/login',
            component: Login,
            name: 'Login'
        },
        {
            path: '/napravi-objavu',
            component: NapraviObjavu,
            name: 'NapraviObjavu'
        },
        {
            path: '/prikaz-objave',
            component: PrikazObjave,
            name: 'PrikazObjave'
        },
        {
            path: "/dashboard",
            name: "Dashboard",
            component: Dashboard,
           beforeEnter: (to, form, next) =>{
               axios.get('/api/authenticated').then(()=>{
                   next()
               }).catch(()=>{
                   return next({ name: 'Login'})
               })
           }
          }
    ]
}