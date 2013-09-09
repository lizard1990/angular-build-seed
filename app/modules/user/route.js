/**
 * Created with JetBrains WebStorm.
 * User: @kazaff
 * Date: 13-9-4
 * Time: ����3:01
 */
define(function(){
    'use strict';

    return {
        group: 'user'
        , title: '�û�����'
        , icon: ''
        , son:[{
            uri: '/users/list/:page'
            , controller: 'userListCtrl'
            , templateUrl: 'modules/user/templetes/user-list.html'
            , ifMenu: true
            , name: 'userList'
            , title: '�б�'
            , icon: ''
            , api: 'restV1/users/get'
        }
        , {
            uri: '/user/add'
            , controller: 'userAddCtrl'
            , templateUrl: 'modules/user/templetes/user-add.html'
            , ifMenu: false
            , name: 'userAdd'
            , title: '�����û�'
            , icon: ''
            , api: 'restV1/user/post'
        }
        , {
            uri: '/user/edit/:uid'
            , controller: 'userEditCtrl'
            , templateUrl: 'modules/user/templetes/user-edit.html'
            , ifMenu: false
            , name: 'userEdit'
            , title: '�༭'
            , icon: ''
            , api: 'restV1/user/put'
        }
        ,{
            uri: '/user/info/:uid'
            , controller: 'userInfoCtrl'
            , templateUrl: 'modules/user/templetes/user-info.html'
            , ifMenu: false
            , name: 'userInfo'
            , title: '��ϸ��Ϣ'
            , icon: ''
            , api: 'restV1/user/get'
        }
        ,{
            uri: '/user/delete/:uid'
            , controller: 'userDeleteCtrl'
            , templateUrl: 'modules/user/templetes/user-delete.html'
            , ifMenu: false
            , name: 'userDelete'
            , title: 'ɾ��'
            , icon: ''
            , api: 'restV1/user/delete'

        }]
    };
});