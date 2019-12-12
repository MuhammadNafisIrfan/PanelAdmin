using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Test
{
    #region Customer
    public class Customer
    {
        #region Member Variables
        protected int _id;
        protected string _rules;
        #endregion
        #region Constructors
        public Customer() { }
        public Customer(string rules)
        {
            this._rules=rules;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Rules
        {
            get {return _rules;}
            set {_rules=value;}
        }
        #endregion
    }
    #endregion
}